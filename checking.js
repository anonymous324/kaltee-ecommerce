async function checkFileExistsInDirectory() {
  try {
    const directoryHandle = await window.showDirectoryPicker();
    const fileName = "example.txt"; // Replace with the file name you want to check

    // Check if the file exists in the directory
    const fileHandle = await directoryHandle.getFileHandle(fileName);
    console.log(`File "${fileName}" exists.`);
  } catch (error) {
    if (error.name === 'NotFoundError') {
      console.log(`File "${fileName}" does not exist.`);
    } else {
      console.error('An error occurred:', error);
    }
  }
}

// Call the function to check for file existence
checkFileExistsInDirectory();