<template>
    <form class="form-inline" >
    <div class="form-group">
    <label for="numeric">Documento</label>
    <input type="numeric" class="form-control" id="documento">
    </div>
   
    <button type="submit" class="btn btn-default">Buscar</button>
    </form>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>