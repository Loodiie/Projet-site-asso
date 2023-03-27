const contentBlocks = document.querySelectorAll('.images_projet');


document.querySelectorAll('.style_filtre').forEach(button => {
  button.addEventListener('click', event => {
    const selectedTag = event.target.dataset.tag;
    contentBlocks.forEach(block => {
      if (!block.classList.contains(selectedTag)) {
        block.style.display = 'none';
      } else {
        block.style.display = '';
      }
    });
  });
});