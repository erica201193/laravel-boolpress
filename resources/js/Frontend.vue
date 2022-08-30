<template>
    <div>
        <h1>Hello vue.js <br> {{ message }}</h1>
        <p>Questa è la mia pagina pubblica fatta in vue</p>
    </div>
</template>


<script>
export default {
    components: {},
    data() {
        return {
            message: "Ciao sono un sexy componente Vue, baby",
        };
    },
};
</script>