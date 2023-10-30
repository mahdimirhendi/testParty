# Test Party

Celebrate your PHP unit test successes with this delightful little package! It generates fun ASCII art when your tests pass.

### Install

```bash
composer require mahdi/testparty --dev
```


### Usage

You can add the package extension to your project's `phpunit.xml` file:

```xml
<phpunit>
    <!-- ... -->

    <extensions>
        <bootstrap class="Mahdi\Testparty\TestParty"></bootstrap>
    </extensions>
    
    <!-- ... -->
</phpunit>
```

![TestParty](https://imgurl.ir/uploads/u718377_TestParty.png)

## License

This package is open-sourced software licensed under the [MIT](https://opensource.org/licenses/MIT) license.
