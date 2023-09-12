<template>
    <div>
        <slot />
    </div>

    <Footer />
</template>

<script>
import Footer from "./Footer.vue";
export default {
    components: {
        Footer,
    },
};
</script>
