<script>

function editCard(id){
    alert('Card : ' + id + ' edited');
}

function deleteCard(id){
    alert('Card : ' + id + ' deleted');
    $.post( "delete", { pergunta: id}).done(function(data) {console.log(data)});

}

</script>