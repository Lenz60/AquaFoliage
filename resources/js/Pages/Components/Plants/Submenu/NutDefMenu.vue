<template>
    <div>
        <div v-if="Class == 'hide'">
            <li>
                <details close>
                    <summary class="w-full h-full text-lg">
                        <div>
                            <img
                                src="/icons/nutrientico.png"
                                class="w-[42px] h-[34.29px]"
                            />
                        </div>
                        <div>Nutrient Deficiencies</div>
                    </summary>
                    <ul>
                        <li v-for="nutDef in NutDefs">
                            <Link
                                :href="route('plantCharacteristic')"
                                :data="{ content: 'nutDef', id: nutDef.id }"
                            >
                                <a>{{ nutDef.name }}</a>
                            </Link>
                        </li>
                    </ul>
                </details>
            </li>
        </div>
        <div v-else-if="Class == 'show'">
            <li>
                <details open>
                    <summary class="w-full h-full text-lg">
                        <div>
                            <img
                                src="/icons/nutrientico.png"
                                class="w-[42px] h-[34.29px]"
                            />
                        </div>
                        <div>Nutrient Deficiencies</div>
                    </summary>
                    <ul>
                        <li v-for="nutDef in NutDefs">
                            <Link
                                :href="route('plantCharacteristic')"
                                :data="{ content: 'nutDef', id: nutDef.id }"
                                ><a>{{ nutDef.name }}</a></Link
                            >
                        </li>
                    </ul>
                </details>
            </li>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    props: ["Class", "NutDefs"],
    components: {
        Link,
    },
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
