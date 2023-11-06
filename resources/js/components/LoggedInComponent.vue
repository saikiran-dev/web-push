<template>
    <p>
        you are logged in

        <span v-if="userId">{{ userId }}</span>
    </p>
</template>
<script>
import Swal from "sweetalert2";
import "sweetalert2/src/sweetalert2.scss";
export default {
    data() {
        return {
            userId: null,
        };
    },
    mounted() {
        const routeSplit = this.$route.path.split("/");
        this.userId = routeSplit[routeSplit.length - 1];

        Echo.channel("notification").listen(
            `.test.notification.${this.userId}`,
            (e) => {
                Swal.fire(`${e.user.name}, You got a notification`);
            }
        );
    },
};
</script>
