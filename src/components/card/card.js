<script>

function editCard(id){
    alert('Card : ' + id + ' edited');
}

function deleteCard(id){
    alert('Card : ' + id + ' deleted');
    $.post( "addpergunta", { pergunta: id, type: 'delete'}).done(function(data) {console.log(data)});
}

</script>