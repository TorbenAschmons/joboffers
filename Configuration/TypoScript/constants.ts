
plugin.tx_joboffers_pi1 {
  view {
    # cat=plugin.tx_joboffers_pi1/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:joboffers/Resources/Private/Templates/
    # cat=plugin.tx_joboffers_pi1/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:joboffers/Resources/Private/Partials/
    # cat=plugin.tx_joboffers_pi1/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:joboffers/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_joboffers_pi1//a; type=string; label=Default storage PID
    storagePid =
  }
}
