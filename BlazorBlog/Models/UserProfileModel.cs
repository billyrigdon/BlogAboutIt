namespace BlazorBlog.Models ;
public class UserProfile
{
  public int Id { get; set; }
  public int UserId { get; set; }
  public string Birthday { get; set; }
  public DateTime CreatedAt { get; set; }
  public DateTime UpdatedAt { get; set; }
  public string BackgroundPicture { get; set; }
  public string Music { get; set; }
  public string Interests { get; set; }
  public string Website { get; set; }
  public string Location { get; set; }
  public string RelationshipStatus { get; set; }
  public string DisplayName { get; set; }
  public string Bio { get; set; }
  public string ProfilePicture { get; set; }
}