<template>
    <AuthenticatedLayout>
        <div>
            <h1>Its a admin page!</h1>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
export default {
    components: {
        AuthenticatedLayout,
    },
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
