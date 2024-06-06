<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>


<script>
  const myModal = document.getElementById('exampleModal')

  myModal.addEventListener('shown.bs.modal', (event, other) => {
    const button = event.relatedTarget
    const card = button.parentNode.parentNode
    console.log({card})

    const cardTitle = card.querySelector('.card-title').textContent
    const cardCategory = card.querySelector('.card-text').textContent
    const cardImg = card.querySelector('.card-img').src
    const cardDescription = card.querySelector('.card-description').textContent



    myModal.querySelector('.modal-title').textContent = cardTitle
    // myModal.querySelector('.modal-description').textContent = cardCategory
    myModal.querySelector('.modal-img').src = cardImg
    myModal.querySelector('.modal-description').textContent = cardDescription
  
  })

</script>