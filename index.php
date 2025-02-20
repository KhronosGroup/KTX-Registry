<?php
$static_title = 'Khronos KTX Registry';

include_once("../../assets/static_pages/khr_page_top.php");
?>

<p> The KTX registry contains specifications of the core file format
    and registered Khronos- and vendor-approved extensions adding
    supercompression schemes and metadata keys. Vendors are strongly
    encouraged to register schemes and keys to avoid conflicts.
    Registration is done through the </a
    href="https://github.com/KhronosGroup/KTX-Specification">KTX-Specification
    source repository</a> on GitHub. See <a
    href="specs/2.0/ktxspec.v2.html#registeringExtensions">Registering
    Extensions</a> in the KTX specification.

<p> There is currently no header file or other canonical machine
    readable description for either KTX v1 or v2.</p>

<p> Implementers of readers and writers may find the following useful:</p>
<ul>
<li>The header file <a href="../dataformat/api/1.3/khr_df.h">khr_df.h</a> in the
    <a href="../dataformat">Khronos Data Format Specification Registry</a>
    for dealing with the Data Format Descriptor part of KTX v2.0.</li>
<li>The <a href="">Data Format Utilities</a> also for dealing with the Data
    Format Descriptor.</li>
<li>The <a href="https://github.com/KhronosGroup/KTX-Specification/blob/master/formats.json">JSON database</a>
    (<a href="https://github.com/KhronosGroup/KTX-Specification/blob/master/formats.schema.json">schema</a>)
    with mappings from Vulkan format enums to OpenGL, Direct3D and Metal enums.</li>
<li>The <a href="https://github.com/KhronosGroup/KTX-Specification/blob/master/generate_format_switches.rb">
    Switch-case generator</a> that produces 5 files with simple C-like case-return
    statements from the above mappings.</li>
</ul>

<h4> KTX File Format Specifications</h4>

<p> The current version of KTX is KTX v2.0. </p>

<ul>
<li><a href="specs/2.0/ktxspec.v2.html">KTX v2.0.4</a> released
    February 20th 2025.</li>
<li><a href="specs/1.0/ktxspec.v1.html">KTX v1.0.4</a> (updated
    March 20th 2021 with official logos).</li>
</ul>

<h4> KTX Fragment URI Specification</h4>

<p>The KTX Fragment URI specification describes the syntax for constructing
   URIs to address fragments of a KTX v2 file.</p>

<ul>
<li><a href="specs/2.0/ktx-frag.html">KTX Fragment URI 1.0.1</a> released
    December 9th 2022.</li>
</ul>

<h6> Technical Notes and White Papers</h6>

<p>See the <a href="https://www.khronos.org/ktx/">KTX Home Page</a> for
   information about KTX and guides to using it.</p>

<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
</body>
</html>
