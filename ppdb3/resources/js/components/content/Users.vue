<template>
  <!-- ---- -->
  <div class="row">
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body card-transparent">
          <h4 class="card-title">Tambah User</h4>
          <!-- <p class="card-description">* Boleh dikosongkan</p> -->
          <form class="forms-sample">
            <div class="form-group">
              <label for="name">Nama</label>
              <input
                type="text"
                class="form-control"
                v-model="name"
                id="name"
                placeholder="Nama urusan"
              />
            </div>
            <div class="form-group">
              <label for="mail">Email</label>
              <input
                type="email"
                class="form-control"
                v-model="mail"
                id="exampleInputEmail1"
                placeholder="Keterangan tentang jurusan"
              />
            </div>
            <div class="form-group">
              <div class="form-group">
              <label for="roles">Status Keaktifan</label>
              <div class="form-check form-check-success">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked /> Aktif
                      </label>
                    </div>
              </div>
            </div>
            <div class="form-group">
              <label for="roles">Rules</label>
              <div class="form-group">
                <div class="form-check form-check-success" >
                  <label class="form-check-label">
                    <input
                      type="radio"
                      class="form-check-input"
                      v-model="roles"
                      name="roles"
                      id="optionsRadios1"
                      value
                    />
                    Admin
                  </label>
                </div>
                <div class="form-check form-check-success">
                  <label class="form-check-label">
                    <input
                      type="radio"
                      class="form-check-input"
                      v-model="roles"
                      name="roles"
                      id="optionsRadios2"
                      checked
                    />
                    Guru
                  </label>
                </div>
                <div class="form-check form-check-success">
                  <label class="form-check-label">
                    <input
                      type="radio"
                      class="form-check-input"
                      v-model="roles"
                      name="roles"
                      id="optionsRadios2"
                      checked
                    />
                    Siswa
                  </label>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-rounded btn-primary mr-2">Simpan</button>
            <button class="btn btn-rounded btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-body card-transparent">
          <h4 class="card-title">Daftar User</h4>

          <!-- batasan pengujian -->
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Rules</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Herman Beck</td>

                  <td>herman@gmail.com</td>
                  <td>
                    <div class="form-check form-check-success">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked />
                      </label>
                    </div>
                  </td>
                  <td>
                      Admin
                  </td>
                  <td>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm btn-icon">
                      <i class="mdi mdi-eye"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-sm btn-icon">
                      <i class="mdi mdi-delete"></i>
                    </button>
                    <button type="button" class="btn btn-info btn-rounded btn-sm btn-icon">
                      <i class="mdi mdi-table-edit"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>Herman Beck</td>

                  <td>herman@gmail.com</td>
                  <td>
                    <div class="form-check form-check-success">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked />
                      </label>
                    </div>
                  </td>
                  <td>Guru</td>
                  <td>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm btn-icon">
                      <i class="mdi mdi-eye"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-sm btn-icon">
                      <i class="mdi mdi-delete"></i>
                    </button>
                    <button type="button" class="btn btn-info btn-rounded btn-sm btn-icon">
                      <i class="mdi mdi-table-edit"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>Herman Beck</td>

                  <td>herman@gmail.com</td>
                  <td>
                    <div class="form-check form-check-success">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked />
                      </label>
                    </div>
                  </td>
                  <td>Siswa</td>
                  <td>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm btn-icon">
                      <i class="mdi mdi-eye"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-sm btn-icon">
                      <i class="mdi mdi-delete"></i>
                    </button>
                    <button type="button" class="btn btn-info btn-rounded btn-sm btn-icon">
                      <i class="mdi mdi-table-edit"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>Herman Beck</td>

                  <td>herman@gmail.com</td>
                  <td>
                    <div class="form-check form-check-success">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked />
                      </label>
                    </div>
                  </td>
                  <td>Siswa</td>
                  <td>
                    <button type="button" class="btn btn-primary btn-rounded btn-sm btn-icon">
                      <i class="mdi mdi-eye"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-rounded btn-sm btn-icon">
                      <i class="mdi mdi-delete"></i>
                    </button>
                    <button type="button" class="btn btn-info btn-rounded btn-sm btn-icon">
                      <i class="mdi mdi-table-edit"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- batasan -->
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