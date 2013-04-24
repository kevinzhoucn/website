{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="home_front" assign="obj"}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>{#site_title#}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/website.css" />
  </head>
  <body>
    <div id="doc" class="yui-t2">
      <div id="bd">
        <div id="yui-main">
          <div class="yui-b">
            <div id="header" class="yui-g">
                {include file = $obj->mHomeHearder}
            </div>
            <div id="navigation" class="yui-g">
                {* include file = $obj->mHomeNavigation *}
            </div>
            <div id="contents" class="yui-g">
              {include file = $obj->mHomeMain}
            </div>
          </div>
         </div>
         <div class="yui-b">
           {* Place list of departments here *}
        </div>
      </div>
    </div>
  </body>
</html>