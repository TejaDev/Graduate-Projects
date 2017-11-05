using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(Permaculture_Animal.Startup))]
namespace Permaculture_Animal
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
