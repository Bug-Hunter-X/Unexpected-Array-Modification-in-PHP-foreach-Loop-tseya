# PHP Foreach Loop Bug
This repository demonstrates a common, yet subtle, bug in PHP related to modifying arrays within a `foreach` loop.

The `bug.php` file shows the issue where attempting to `unset` elements within the loop results in skipping elements unexpectedly.  The `bugSolution.php` file provides the correct solution by using a reference.