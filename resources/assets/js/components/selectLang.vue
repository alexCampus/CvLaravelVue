<template>
    <div class="locale-changer">
        <b-form-group>
            <b-form-radio-group id="radios2" name="radioSubComponent" plain v-model="selected">
                <b-form-radio class="btnRadio" value="fr" v-on:change="changeLang">
                    Fr <img src="images/flagFR.png"></b-form-radio>
                <b-form-radio class="btnRadio" value="en" v-on:change="changeLang">En <img src="images/flagGB.png"></b-form-radio>
            </b-form-radio-group>
        </b-form-group>
    </div>
</template>

<script>
    export default {
        name: "select-lang",
        data () {
            return { langs: ['fr', 'en'], selected:'fr' }
        },
        methods: {
            changeLang: function (value) {
                this.$emit('lang', value);
            }
        }
    }
</script>

<style scoped>
    .locale-changer {
        color: #fff;
        margin-top:2%;
    }
    .btnRadio {
        background-color:#08aeac;
        border: none;
        border-radius: 5px;
        padding: 2%;
    }
    .btnRadio img {
        width: 30px;
        height: 30px;
    }
    .test {
        background-color:#021533;
    }
    @media screen and (max-width: 1024px) {
        .btnRadio {
            width: 20%;
            height: 50px;
        }
    }
</style>