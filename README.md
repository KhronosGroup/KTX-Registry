# KTX-Registry

The KTX-Registry repository contains the KTX File-Format and Extension
Registry, including generated specifications. The sources for these
documents are mostly found in the separate
https://github.com/KhronosGroup/KTX-Specification repository; this
repository is used as a backing store for the web view of the registry at
https://www.khronos.org/registry/ktx/. Commits to the main branch of
KTX-Registry will be reflected in the web view.

Interesting files in this repository include:

* index.php - top level index page for the web view. This relies on PHP
  include files found elsewhere on www.khronos.org and so is not very
  useful in isolation.
* specs/1.0/ - specification for file format version 1.
* specs/2.0/ - specification for file format version 2.


## Reserving KTX supercompressionScheme ids

EGL enumerants are documented in ssid.xml . New ranges of ids can be
allocated by proposing a pull request to master modifying this file, following the existing examples. Allocate ranges starting at the lowest free values available. Ranges are not officially allocated until your
pull request is *accepted* into master. At that point you can use values
from your assigned range for API extensions.


## Adding supercompressionScheme Specifications

To be completed.

## Reserving Metadata Keys

To be completed.

## Adding Metadata Specifications

To be completed.



