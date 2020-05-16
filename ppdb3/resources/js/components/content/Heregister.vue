<template>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body card-transparent">
          <h4 class="card-title">Biodata</h4>
          <form class="forms-sample">
            <!-- <p class="card-description">* Boleh dikosongkan</p> -->

            <div class="form-group">
              <label for="nisn">Nisn</label>
              <input
                type="nisn"
                class="form-control"
                v-model="nisn"
                id="nisn"
                placeholder="Nomor induk siswa nasional"
              />
            </div>
            <div class="form-group">
              <label for="name">Nama</label>
              <input
                type="text"
                class="form-control"
                v-model="name"
                id="name"
                placeholder="Nama Lengkap"
              />
            </div>
            <div class="form-group">
              <label for="gender">Jenis Kelamin</label>
              <div class="form-group">
                <div class="form-check form-check-success">
                  <label class="form-check-label">
                    <input
                      type="radio"
                      class="form-check-input"
                      name="gender"
                      id="optionsRadios1"
                      value
                    />
                    Laki-laki
                  </label>
                </div>
                <div class="form-check form-check-success">
                  <label class="form-check-label">
                    <input
                      type="radio"
                      class="form-check-input"
                      name="gender"
                      id="optionsRadios2"
                      checked
                    />
                    Perempuan
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="address">Alamat</label>
              <input
                type="text"
                v-model="address"
                class="form-control"
                id="address"
                placeholder="Jl. Melati RT.01 RW 02 Kec. Mepanga"
              />
            </div>
            <div class="form-group">
              <label for="birth">Tempat Lahir</label>
              <input type="text" v-model="birth" class="form-control" id="birth" placeholder="Palu" />
            </div>
            <div class="form-group">
              <label for="birthday">Tanggal Lahir</label>
              <input
                type="date"
                v-model="birthday"
                class="form-control"
                data-provide="datepicker"
                id="birthday"
                placeholder="Palu"
              />
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body card-transparent">
          <h4 class="card-title">Data Sekolah Asal</h4>
          <form class="forms-sample">
            <div class="form-group">
              <label for="lastschool">Nama Sekolah</label>
              <input
                type="text"
                v-model="lastschool"
                class="form-control"
                id="birth"
                placeholder="SMPN 3 Kayu Agung"
              />
            </div>
            <div class="form-group">
              <label for="schooladdress">Alamat Sekolah</label>
              <input
                type="text"
                v-model="schooladdress"
                class="form-control"
                id="birth"
                placeholder="Jl. Nusantara No.1 Kayuagung"
              />
            </div>
            <div class="form-group">
              <label for="province">Provinsi</label>
              <select class="form-control" v-model="province">
                <option>Sulawesi Tengah</option>
                <option>Sulawesi Utara</option>
              </select>
            </div>
            <div class="form-group">
              <label for="city">Kabupaten/Kota</label>
              <select class="form-control" v-model="city">
                <option>Parigi Moutong</option>
                <option>Donggala</option>
              </select>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body card-transparent">
          <div class="card-title">Berkas Persyaratan</div>
          <div class="d-flex flex-wrap justify-content-xl-between">
            <div
              class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
              v-for="(file, index) in files"
              :key="index"
            >
              <!-- <i class="mdi mdi-eye mr-3 icon-lg text-info"></i> -->
              <div class="d-flex flex-column justify-content-around">
                <small class="mb-1 text-muted">Scan</small>
                <h5 class="mr-2 mb-0">{{ file.text }}</h5>
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
    <div class="col-md-12 grid-margin stretch-card">
      <button type="submit" class="btn btn-rounded btn-primary mr-2">Simpan</button>
      <button class="btn btn-rounded btn-light">Cancel</button>
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