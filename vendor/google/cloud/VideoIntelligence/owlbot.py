# Copyright 2018 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

"""This script is used to synthesize generated parts of this library."""

import logging
from pathlib import Path
import subprocess

import synthtool as s
from synthtool.languages import php
from synthtool import _tracked_paths

logging.basicConfig(level=logging.DEBUG)

src = Path(f"../{php.STAGING_DIR}/VideoIntelligence").resolve()
dest = Path().resolve()

# Added so that we can pass copy_excludes in the owlbot_main() call
_tracked_paths.add(src)

php.owlbot_main(src=src, dest=dest)



# document and utilize apiEndpoint instead of serviceAddress
s.replace(
    "**/Gapic/*GapicClient.php",
    r"'serviceAddress' =>",
    r"'apiEndpoint' =>")
s.replace(
    "**/Gapic/*GapicClient.php",
    r"@type string \$serviceAddress\n\s+\*\s+The address",
    r"""@type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address""")
s.replace(
    "**/Gapic/*GapicClient.php",
    r"\$transportConfig, and any \$serviceAddress",
    r"$transportConfig, and any `$apiEndpoint`")

# V1 is GA, so remove @experimental tags
s.replace(
    'src/V1/VideoIntelligenceServiceClient.php',
    r'^(\s+\*\n)?\s+\*\s@experimental\n',
    '')
s.replace(
    'src/V1/Gapic/*GapicClient.php',
    r'^(\s+\*\n)?\s+\*\s@experimental\n',
    '')

### [START] protoc backwards compatibility fixes

# roll back to private properties.
s.replace(
    "src/**/V*/**/*.php",
    r"Generated from protobuf field ([^\n]{0,})\n\s{5}\*/\n\s{4}protected \$",
    r"""Generated from protobuf field \1
     */
    private $""")

# prevent proto messages from being marked final
s.replace(
    "src/**/V*/**/*.php",
    r"final class",
    r"class")

# Replace "Unwrapped" with "Value" for method names.
s.replace(
    "src/**/V*/**/*.php",
    r"public function ([s|g]\w{3,})Unwrapped",
    r"public function \1Value"
)

### [END] protoc backwards compatibility fixes

# fix relative cloud.google.com links
s.replace(
    "src/**/V*/**/*.php",
    r"(.{0,})\]\((/.{0,})\)",
    r"\1](https://cloud.google.com\2)"
)

# fix phpdoc examples for optional-to-required parameters
f = open("src/V1/Gapic/VideoIntelligenceServiceGapicClient.php",  "r")
if ' *     $operationResponse = $videoIntelligenceServiceClient->annotateVideo();' in f.read():
    s.replace(
        "src/V1/Gapic/VideoIntelligenceServiceGapicClient.php",
        r"^ \*     \$operationResponse = \$videoIntelligenceServiceClient->annotateVideo\(\);$",
        r""" *     $inputUri = 'gs://cloud-samples-data/video/cat.mp4';
 *     $featuresElement = Feature::LABEL_DETECTION;
 *     $features = [$featuresElement];
 *     $operationResponse = $videoIntelligenceServiceClient->annotateVideo(['inputUri' => $inputUri, 'features' => $features]);"""
    )
    s.replace(
        "src/V1/Gapic/VideoIntelligenceServiceGapicClient.php",
        r"^     \*     \$operationResponse = \$videoIntelligenceServiceClient->annotateVideo\(\);$",
        r"""     *     $inputUri = 'gs://cloud-samples-data/video/cat.mp4';
     *     $featuresElement = Feature::LABEL_DETECTION;
     *     $features = [$featuresElement];
     *     $operationResponse = $videoIntelligenceServiceClient->annotateVideo(['inputUri' => $inputUri, 'features' => $features]);"""
    )

# format generated clients
subprocess.run([
    'npm',
    'exec',
    '--yes',
    '--package=@prettier/plugin-php@^0.16',
    '--',
    'prettier',
    '**/Gapic/*',
    '--write',
    '--parser=php',
    '--single-quote',
    '--print-width=80'])
