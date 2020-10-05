function confirmDelete(event) {
  event.preventDefault()
  if(confirm('Do you want to delete it?')) {
    window.location = event.target.getAttribute('href');
  }
}
