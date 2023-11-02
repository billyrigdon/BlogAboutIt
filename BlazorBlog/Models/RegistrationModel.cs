using System.ComponentModel.DataAnnotations;

namespace BlazorBlog.Models
{
  public class RegistrationModel
  {

    [Required]
    public string Name { get; set; }

    [Required]
    [EmailAddress]
    public string Email { get; set; }

    [Required]
    [MinLength(6)]
    public string Password { get; set; }
  }
}
