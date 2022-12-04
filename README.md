# SimpleRcScanner

[Demo](http://test.sui.li/oszi): This demo is not integrating last changes

The script requires data in which the first level is always low. Otherwise the plot will be vertically flipped.
You can also paste data on the first line of ReceivedSignalVisualizer.ods LibreOffice Calc spreadsheet. Only the first 50 timings will be plotted.

## Change log

2022 12 04: David Tre (<https://github.com/davidtre07>)
        - Allow multilines as input
        - Added gitignore file

2022 12 03: David Tre (<https://github.com/davidtre07>)
        - Support esphome dump (<https://esphome.io/components/remote_transmitter.html#setting-up-rf-devices>)
                (The dump provides negatives values)
        - Added console logging
        - Increase font size
