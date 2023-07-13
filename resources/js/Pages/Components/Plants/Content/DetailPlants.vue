<template>
    <div>
        <h3 class="text-primary font-montserrat font-semibold text-xl p-5">
            {{ Plant["name"] }}
        </h3>
        <p class="text-md text-primary font-montserrat pl-5">
            Common name : {{ Plant["common_name"] }}
        </p>
        <div class="flex p-5">
            <div>
                <img
                    src="https://pbs.twimg.com/profile_images/1289815343892819969/zIk4dt2E_400x400.jpg"
                    class="w-[200px] h-[200px]"
                />
            </div>
            <div class="text-primary font-montserrat text-sm p-5 ml-[10%]">
                <p>Genus : {{ Plant["genus"] }}</p>
                <p>Species : {{ Plant["species"] }}</p>
                <p>Difficulty : {{ Plant["difficulty"] }}</p>
                <p>Light : {{ Plant["light"] }}</p>
                <p>Recommended temperature : {{ Plant["temp"] }}</p>
                <p>Usage : {{ Plant["usage"] }}</p>
            </div>
        </div>

        <p class="text-primary text-sm p-5">{{ Plant["body"] }}</p>
    </div>
</template>

<script>
import { onMounted } from "vue";

export default {
    props: ["Plant"],
    setup(props) {
        console.log(props.plantName);
        onMounted(() => {
            // console.log(this.name);
        });
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
