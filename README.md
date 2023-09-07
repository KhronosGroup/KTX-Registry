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


## Registering KTX Extensions

Vendors can create their own supercompression schemes and metadata items. To avoid conflicts in the scheme id and metadata key name spaces, those doing so must register them with Khronos as described in [Registering Extensions](https://registry.khronos.org/KTX/specs/2.0/ktxspec.v2.html#registeringExtensions) in the specification.

Registration involves proposing pull-requests (PRs) against the default
branch (currently main) of the
[KTX-Specification](https://github.com/KhronosGroup/KTX-Specification) repository on GitHub. Most of the changes will be to the source file
[ktxspec.adoc](https://github.com/KhronosGroup/KTX-Specification/blob/main/ktxspec.adoc).



