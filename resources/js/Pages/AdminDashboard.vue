<template>
    <Head title="Dashboard Admin" />
    <AuthenticatedLayout>
        <div class="flex flex-row w-full h-full">
            <div
                :class="{
                    'w-[10%]': showTime == true,
                    'w-[40%]': showTime == false,
                }"
            >
                <Menu
                    class=""
                    :Content="Content"
                    @SidebarShow="getSidebar($event)"
                    @DashboardDesc="getDesc($event)"
                ></Menu>
            </div>
            <div class="w-full">
                <h1>Its a admin page!</h1>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import Menu from "./Components/Plants/Menu.vue";
import { ref } from "vue";
export default {
    components: {
        Head,
        Menu,
        AuthenticatedLayout,
    },
    setup() {
        const Content = "DashboardAdmin";
        let showTime = ref(false);
        return { Content, showTime };
    },
    methods: {
        getSidebar(data) {
            if (data === "showTime") {
                this.showTime = false;
            } else {
                this.showTime = true;
            }
        },
    },
};
</script>

<style lang="scss" scoped></style>
