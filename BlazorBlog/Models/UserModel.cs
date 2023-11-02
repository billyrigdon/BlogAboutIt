namespace BlazorBlog.Models;
public class User
{
  public int Id { get; set; }
  public string Email { get; set; }
  public string EmailVerifiedAt { get; set; }
  public DateTime CreatedAt { get; set; }
  public DateTime UpdatedAt { get; set; }
  public string Password { get; set; }
  public string Name { get; set; }
  public string RememberToken { get; set; }
  public UserProfile UserProfile { get; set; }
  public List<Post> Posts { get; set; }
}