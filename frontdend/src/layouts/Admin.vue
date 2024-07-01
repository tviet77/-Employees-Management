<template>
  <TheHeader></TheHeader>
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-sm-3 d-none d-sm-flex">
        <a-list size="small" bordered style="width: 100%" >
          <Menu></Menu>
          <template #header>
            <div>Menu</div>
          </template>
        </a-list>
      </div>
      <div class="col-12 col-sm-9">
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>

<script>
import TheHeader from "../components/TheHeader.vue";
import Menu from "../layouts/Menu.vue";

export default {
  components: {
    TheHeader: TheHeader,
    Menu: Menu
}}
</script>