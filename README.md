  GET|HEAD        / .................................................................................................................................................................................................................................................................... 
  POST            _ignition/execute-solution ............................................................................................................................................................. ignition.executeSolution › Spatie\LaravelIgnition › ExecuteSolutionController
  GET|HEAD        _ignition/health-check ......................................................................................................................................................................... ignition.healthCheck › Spatie\LaravelIgnition › HealthCheckController
  POST            _ignition/update-config ...................................................................................................................................................................... ignition.updateConfig › Spatie\LaravelIgnition › UpdateConfigController
  GET|HEAD        api/cidades ................................................................................................................................................................................................................. cidades.index › Api\CityController@index
  POST            api/cidades ................................................................................................................................................................................................................. cidades.store › Api\CityController@store
  GET|HEAD        api/cidades/create ........................................................................................................................................................................................................ cidades.create › Api\CityController@create
  GET|HEAD        api/cidades/{cidade} .......................................................................................................................................................................................................... cidades.show › Api\CityController@show
  PUT|PATCH       api/cidades/{cidade} ...................................................................................................................................................................................................... cidades.update › Api\CityController@update
  DELETE          api/cidades/{cidade} .................................................................................................................................................................................................... cidades.destroy › Api\CityController@destroy
  GET|HEAD        api/cidades/{cidade}/edit ..................................................................................................................................................................................................... cidades.edit › Api\CityController@edit
  GET|HEAD        api/cidades/{id_cidade}/medicos .................................................................................................................................................................................................... Api\CityController@getCityDoctors
  POST            api/login .................................................................................................................................................................................................................................. Auth\AuthController@login
  POST            api/logout ................................................................................................................................................................................................................................ Auth\AuthController@logout
  POST            api/me ........................................................................................................................................................................................................................................ Auth\AuthController@me
  GET|HEAD        api/medicos ............................................................................................................................................................................................................... medicos.index › Api\DoctorController@index
  POST            api/medicos ............................................................................................................................................................................................................... medicos.store › Api\DoctorController@store
  GET|HEAD        api/medicos/create ...................................................................................................................................................................................................... medicos.create › Api\DoctorController@create
  GET|HEAD        api/medicos/{id_medico}/pacientes ................................................................................................................................................................................................... Api\DoctorController@getPatients
  POST            api/medicos/{id_medico}/pacientes ................................................................................................................................................................................................. Api\DoctorController@createPatient
  GET|HEAD        api/medicos/{medico} ........................................................................................................................................................................................................ medicos.show › Api\DoctorController@show
  PUT|PATCH       api/medicos/{medico} .................................................................................................................................................................................................... medicos.update › Api\DoctorController@update
  DELETE          api/medicos/{medico} .................................................................................................................................................................................................. medicos.destroy › Api\DoctorController@destroy
  GET|HEAD        api/medicos/{medico}/edit ................................................................................................................................................................................................... medicos.edit › Api\DoctorController@edit
  GET|HEAD        api/pacientes .......................................................................................................................................................................................................... pacientes.index › Api\PatientController@index
  POST            api/pacientes .......................................................................................................................................................................................................... pacientes.store › Api\PatientController@store
  GET|HEAD        api/pacientes/create ................................................................................................................................................................................................. pacientes.create › Api\PatientController@create
  GET|HEAD        api/pacientes/{paciente} ................................................................................................................................................................................................. pacientes.show › Api\PatientController@show
  PUT|PATCH       api/pacientes/{paciente} ............................................................................................................................................................................................. pacientes.update › Api\PatientController@update
  DELETE          api/pacientes/{paciente} ........................................................................................................................................................................................... pacientes.destroy › Api\PatientController@destroy
  GET|HEAD        api/pacientes/{paciente}/edit ............................................................................................................................................................................................ pacientes.edit › Api\PatientController@edit
  POST            api/refresh .............................................................................................................................................................................................................................. Auth\AuthController@refresh
  GET|HEAD        sanctum/csrf-cookie ................................................................................................................................................................................ sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show
