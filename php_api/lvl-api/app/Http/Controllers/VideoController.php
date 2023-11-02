<?php

namespace App\Http\Controllers;

use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Video;

class VideoController extends Controller {
  public function upload(Request $request) {
    $request->validate([
      'video' => 'required|file|mimes:mp4,mov,ogg,qt',
    ]);

    $file = $request->file('video');
    $path = $file->store('videos');

    // Extract metadata and store in database
    $title = 'Title'; // Extract title from filename or use an API
    $description = 'Description'; // Extract description from filename or use an API

    $video = Video::create([
      'title' => $title,
      'description' => $description,
      'file_path' => $path,
    ]);

    FFMpeg::fromDisk('local')
      ->open($video->file_path)
      ->export()
      ->toDisk('videos_hls')
      ->inFormat(new \FFMpeg\Format\Video\X264('libmp3lame', 'libx264'))
      ->save($video->id . '/index.m3u8');

    return response()->json(['message' => 'Video uploaded successfully'], 200);
  }

  public function getAllMovies() {
    $movies = Video::select('id', 'title', 'description')->get();
    return response()->json(['movies' => $movies], 200);
  }

  public function streamVideo($id) {
    $video = Video::findOrFail($id);
    $hlsPath = storage_path('app/videos_hls/' . $video->id . '/index.m3u8');
    return response()->file($hlsPath);
  }
}
