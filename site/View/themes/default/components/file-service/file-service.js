const fileService = {
  
  getFileData: function(file) {
    const fileDataEl = document.querySelectorAll('[data-file=' + file + ']');
    const fileData = fileDataEl[0].innerHTML;
    const fileName = dataServiceFiles[file].name;

    return {
      name: fileName,
      data: fileData
    };
  }
}
