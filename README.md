# Buto-Plugin-ServerPush
Push data to server.

## PHP
```
wfPlugin::includeonce('server/push');
$push = new PluginServerPush();
$result = $push->push('https://www.world.com', array('name' => 'James Smith'));
```
