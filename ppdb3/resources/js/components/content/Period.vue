<template>
  <div class="row">
    <div class="period-frame mx-auto grid-margin">
      <div class="card">
        <div class="card-header">
          Data Tahun Pelajaran
          <router-link to="/" class="btn btn-outline-success btn-fw float-right" type="button">
            <i class="mdi mdi-plus icon-lg"></i>
          </router-link>
        </div>
        <div class="card-body card-transparent">
          <div class="d-flex flex-wrap justify-content-xl-between">
            <div
              class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
              v-for="(department, index) in departments"
              :key="index"
            >
              <!-- <i class="mdi mdi-eye mr-3 icon-lg text-info"></i> -->
              <div class="d-flex flex-column justify-content-around">
                <small class="mb-1 text-muted">Tapel</small>
                <h5 class="mr-2 mb-0">1999/2020</h5>
              </div>
              <div>
                <router-link to="/">
                  <i class="mdi mdi-delete-forever icon-sm text-danger"></i>
                </router-link>
              </div>
              <div>
                <router-link to="/">
                  <i class="mdi mdi-tooltip-edit icon-sm text-primary"></i>
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
export default {
  data() {
    return {
      name: "",
      departments: [{ id: 0 }, { id: 1 }, { id: 2 }, { id: 3 }, { id: 4 }]
    };
  },
  computed: {
    ...mapGetters({
      departments: "department/departments"
    })
  }
  // created(){
  //   this.name = "aku"
  // }
};
</script>