<template>
    Page Quản Lý Roles
</template>

<script>
import { useMenu } from "../../../stores/use-menu.js";

export default {
  components: {},
  setup() {
    const store = useMenu();
    store.onSelectedKeys(['admin-roles']);
  },
};
</script>