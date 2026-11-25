# MQTT v2 — interface manual

## Main screens

- **Devices/Topics** — list and search;
- **Edit** — connection and device settings;
- **Manual** — this page.

## Safe workflow

1. Open settings and validate the connection.
2. Use the built-in status check before changing device parameters.
3. Prefer read-only discovery before saving tokens or credentials.
4. For automation call the module API from scripts instead of parsing the UI.

## Support

Issues: https://github.com/mambursoft/majordomo-mqtt-v2/issues
## Home Assistant interoperability

The cycle publishes a retained birth message `online` to the status topic (`majordomo/status` by default) and registers an MQTT last will `offline` with `retain=1`. This allows Home Assistant and other clients to see when MajorDoMo disconnects, even after an unclean shutdown.

Set **Status topic** to the same topic used by your HA availability configuration. Enable **Retain published values by default** if you want all outgoing states to be replayed to newly connected clients; otherwise retain can still be set per publish call.

For HA Discovery, keep unique IDs stable across restarts and publish discovery payloads with `retain=1`. The separate `ha_discovery` addon can be used if full entity discovery is required.