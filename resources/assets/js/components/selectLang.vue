<template>
    <div class="locale-changer">
        <span class="custom-dropdown">
        <select v-model="$i18n.locale" v-on:input="changeLang($event.target.value)">
            <option v-for="(lang, i) in langs" :key="`Lang${i}`" :value="lang">{{ lang }}</option>
        </select>
            </span>
    </div>
</template>

<script>
    export default {
        name: "select-lang",
        data () {
            return { langs: ['fr', 'en'] }
        },
        methods: {
            changeLang: function (value) {
                this.$emit('lang', value);
            }
        }
    }
</script>

<style scoped>
    .custom-dropdown select {
    width: 100%;
    background-color: #08aeac;
    color: #fff;
    font-size: inherit;
    padding: .5em;
    padding-left: 5em;
    border: 0;
    margin: 0;
    border-radius: 3px;
    text-indent: 0.01px;
    text-overflow: '';
}
</style>