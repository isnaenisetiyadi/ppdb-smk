<template>
  <div class="row">
    <div class="col-md-6 mx-auto grid-margin stretch-card">
      <div class="card card-transparent">
        <div class="card-body card-transparent">
          <h4 class="card-title">Profil User</h4>
          <form class="forms-sample">
           
            <div class="form-group">
              <label for="name">Nama</label>
              <input
                type="text"
                class="form-control"
                placeholder="SMK N 1 Mepanga"
                aria-label="SMK N 1 Mepanga"
                v-model="name"
              />
            </div>
            <div class="form-group">
              <label for="mail">Email</label>
              <input
                type="text"
                class="form-control"
                placeholder="isnaeni@gmail.com"
                aria-label="isnaeni@gmail.com"
                v-model="mail"
              />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input
                type="password"
                class="form-control"
                v-model="password"
              />
            </div>

            <div class="form-group">
              <label for="province">Foto Profil</label>
              <input type="file" name="" id="" class="form-control">
            </div>
           
             <button type="submit" class="btn btn-rounded btn-primary mr-2">Simpan</button>
            <button class="btn btn-rounded btn-light">Cancel</button>
          </form>
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
      departments: [{ id: 0 }, { id: 1 }, { id: 2 }, { id: 3 }, { id: 4 }],
      files: [
        { id: 0, text: "SKL" },
        { id: 1, text: "Kartu Keluarga" },
        { id: 2, text: "Akta Kelahiran" },
        { id: 3, text: "Pas Foto" }
      ]
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