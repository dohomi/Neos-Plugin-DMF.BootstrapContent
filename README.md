Neos-Plugin-DMF.BootstrapContent
================================

Adds some Twitter Bootstrap 3 functionality to Neos content elements

## Installation
Clone this repository into your application folder:

    * cd ROOT/Packages/Application
    * git clone https://github.com/dohomi/Neos-Plugin-DMF.BootstrapContent.git DMF.BootstrapContent

Then check if the plugin needs to get activated inside of your package management. Check if the plugin is listed:

    ./flow package:list
    ./flow package:activate dmf/bootstrapcontent

### Use of Bootstrap menu and breadcrumb in your site package
You can use the bootstrap specific menu and breadcrumb inside of your Root.ts2 with following sample code:

    page = Page {
        (...)
        body {
        (...)
            parts {
                (...)
                menu = Menu {
                    templatePath = 'resource://DMF.BootstrapContent/Private/Templates/TypoScriptObjects/MainMenu.html'
                    websiteName = 'Your website Name'
                    entryLevel = 1
                    maximumLevels = 4
                }
                breadcrumb =  TypoScript:Template {
                    templatePath = 'resource://DMF.BootstrapContent/Private/Templates/TypoScriptObjects/Breadcrumb.html'
                    items = ${q(node).add(q(node).parents())}
                }
            }
        }
    }

### Include JS and CSS from the package
The JavaScript and CSS is available inside of the Resources/Public/assets/* folder. You can add the JS source like this:

    <script src="{f:uri.resource(path: 'assets/jquery/jquery.min.js', package: 'DMF.BootstrapContent')}"></script>
    <script src="{f:uri.resource(path: 'assets/bootstrap/dist/js/bootstrap.js', package: 'DMF.BootstrapContent')}"></script>

For the inclusion of CSS I recommend the use of Grunt as a task planer and build the CSS with processing the LESS files. They are available
inside of Resources/Public/assets/bootstrap/less/*