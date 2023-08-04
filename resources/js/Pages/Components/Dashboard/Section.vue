<template>
    <div>
        <div data-themes="foliage">
            <div
                class="flex flex-col h-screen overflow-x-auto no-scrollbar p-2"
            >
                <div class="p-5">
                    <div v-if="sectionContent == 'Plants'">
                        <p>This is Plants Fav List</p>
                    </div>
                    <div v-else-if="sectionContent == 'NutDefs'">
                        <p>This is NutDef Fav List</p>
                    </div>
                    <div v-else-if="sectionContent == 'Algaes'">
                        <p>This is Plants Fav List</p>
                    </div>
                    <div v-else>
                        <p>Dashboard Home</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["sectionContent"],
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
