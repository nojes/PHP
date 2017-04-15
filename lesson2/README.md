## Setting up Xdebug debugger for PhpStorm

### Xdebug configuration in `php.ini` (windows)
```
[Xdebug]
zend_extension="%sprogdir%/modules/php/%phpdriver%/ext/php_xdebug.dll"
xdebug.auto_trace = 0
xdebug.collect_includes = 1
xdebug.dump.REQUEST = *
xdebug.dump.SESSION = *
xdebug.dump.SERVER = REMOTE_ADDR,REQUEST_METHOD
xdebug.dump_globals = 1
xdebug.dump_once = 1
xdebug.dump_undefined = 1
xdebug.extended_info = 1
xdebug.idekey = "PHPSTORM"
xdebug.max_nesting_level = 256
xdebug.overload_var_dump = 1
xdebug.profiler_enable = 0
xdebug.profiler_enable_trigger = 0
xdebug.profiler_output_dir="%sprogdir%/userdata/temp/xdebug/"
xdebug.profiler_output_name = "cachegrind.out.%H%R"
xdebug.remote_autostart = 1
xdebug.remote_enable = 1
xdebug.remote_handler = "dbgp"
xdebug.remote_host = "localhost"
xdebug.remote_mode = "req"
xdebug.remote_port = 9000
xdebug.trace_output_dir = "%sprogdir%/userdata/temp/xdebug/"
xdebug.var_display_max_children = 256
xdebug.var_display_max_depth = 16
```

### PhpStorm Settings 

##### Default Settings > Languages & Frameworks > PHP > Debug
- Set `Debug port` (9000)
- Disable `Forse break at the first line when no path mapping specified`
- Disable `Forse break at the first line when a script is outside the project`

##### Default Settings > Languages & Frameworks > PHP > Debug > DGBp Proxy
- Set `IDE key` (PHPSTORM)
- Set `Host` (localhost)
- Set `Port` (9000)