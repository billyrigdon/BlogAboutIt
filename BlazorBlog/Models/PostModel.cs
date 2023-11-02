namespace BlazorBlog.Models;

public class Post
{
  public int Id { get; set; }
  public int UserId { get; set; }
  public DateTime CreatedAt { get; set; }
  public DateTime UpdatedAt { get; set; }
  public string Content { get; set; }
  public string Image { get; set; }
  public User User { get; set; }
}