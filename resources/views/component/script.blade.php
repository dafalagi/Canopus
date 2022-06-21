<script src="../path/to/flowbite/dist/flowbite.js"></script>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
<script>
    window.addEventListener('DOMContentLoaded', ()=> {
        const menuBtn = document.querySelector('#menu-btn')
        const dropdown = document.querySelector('#dropdown')
        
        menuBtn.addEventListener('click', () => {
            /* if(dropdown.classList.contains('hidden')){
                dropdown.classList.remove('hidden');
                dropdown.classList.add('flex');
            }else{
                dropdown.classList.remove('flex')
                dropdown.classList.add('hidden')
            } */

            dropdown.classList.toggle('hidden')
            dropdown.classList.toggle('flex')
        })
    })

    const modal = document.querySelector('.modal');
    
    const showModal = document.querySelector('.show-modal');
    const closeModal = document.querySelectorAll('.close-modal');
    
    showModal.addEventListener('click', function (){
      modal.classList.remove('hidden')
    });
    
    closeModal.forEach(close => {
      close.addEventListener('click', function (){
        modal.classList.add('hidden')
      });
    });
</script>
