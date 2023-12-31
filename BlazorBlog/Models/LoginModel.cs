using System.ComponentModel.DataAnnotations;

namespace BlazorBlog.Models
{
  public class LoginModel
  {

    [Required]
    [EmailAddress]
    public string Email { get; set; }

    [Required]
    [MinLength(6)]
    public string Password { get; set; }
  }
}
