using Microsoft.JSInterop;

namespace BlazorBlog.Services;

public class AuthService
{
  private readonly IJSRuntime jsRuntime;

  public AuthService(IJSRuntime jsRuntime)
  {
    this.jsRuntime = jsRuntime;
  }
  public bool IsLoggedIn { get; private set; }

  public event Action? OnChange;

  public void Login()
  {
    IsLoggedIn = true;
    NotifyStateChanged();
  }

  public void Logout()
  {
    IsLoggedIn = false;
    NotifyStateChanged();
  }

  public async Task<bool> CheckIsLoggedIn()
  {
    var token = await jsRuntime.InvokeAsync<string>("localStorage.getItem", "token");
    IsLoggedIn = !string.IsNullOrEmpty(token);
    return IsLoggedIn;
  }

  private void NotifyStateChanged() => OnChange?.Invoke();
}
