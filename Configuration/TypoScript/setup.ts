
plugin.tx_joboffers_pi1 {
  view {
    templateRootPaths.0 = EXT:joboffers/Resources/Private/Templates/
    partialRootPaths.0 = EXT:joboffers/Resources/Private/Partials/
    layoutRootPaths.0 = EXT:joboffers/Resources/Private/Layouts/
  }

}



page = PAGE

page.includeCSS{
  joboffers = EXT:joboffers/Resources/Public/CSS/joboffers.css
}

page.includeJSFooter {
    joboffers = EXT:joboffers/Resources/Public/JavaScript/joboffers.js
}
