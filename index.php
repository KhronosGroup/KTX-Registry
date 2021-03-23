<?php
$static_title = 'Khronos KTX Registry';

include_once("../../assets/static_pages/khr_page_top.php");
?>

<p> The KTX registry contains specifications of the core file format and registered
    Khronos- and vendor-approved extensions adding supercompression schemes and
    metadata keys. Vendors are strongly encouraged to register schemes and keys to avoid
    conflicts. Registration is done through the
    <a href="https://github.com/KhronosGroup/KTX-Registry/">KTX Registry
    backing store</a> repo on GitHub.</p>

<p> There is currently no header file or other canonical machine readable description
    for either KTX v1 or v2.
 
<p> Implementers of readers and writers may find the header file
    <a href="../dataformat/api/1.3/khr_df.h">khr_df.h</a> in the
    <a href="../dataformat">Khronos Data Format Specification Registry</a> useful
    for dealing with the Data Format Descriptor part of KTX v2.0.

<h4> KTX File Format Specifications </h4>

<p> The current version of KTX is KTX v2.0. </p>

<ul>
<li> <a href="https://github.khronos.org/KTX-Specification/">KTX v2.0 specification
    draft</a> (linked from KTX-Specification repo until release.)
<li> <a href="specs/1.0/index.html">KTX v1.0 specification</a> (updated
    March 20th 2021 with official logos). </li>
</ul>

<h6> Technical Notes and White Papers </h6>

<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
</body>
</html>
