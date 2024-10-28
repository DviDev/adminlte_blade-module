<p align="center"><a href="https://seguroeventos.com.br" target="_blank"><img src="https://avatars.githubusercontent.com/u/100489390?s=200" width="200" alt="Dvi logo"></a></p>

## Blade Template AdminLte

<details>
<summary>Installation</summary>
<fieldset>
<legend>INSTALLATION</legend>
Install the project in Dev mode

```
composer require dvi/blade_adminlte-module --dev
```
<hr>

You can install the full theme, or you can install only what you need

To install the full theme, publish all components. They will be installed in the namespace resources\views\modules\lte
```
publish vendor:publish --tag=adminlte-theme
```

To install each component separately, publish the desired component.
```
publish vendor:publish --tag=lte.form.input
```

</fieldset>

</details>
