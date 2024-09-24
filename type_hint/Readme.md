# Type Hint
## Structure overvief asdf asdfasdf asdfasdfw

<style>
r { color: Red }
o { color: Orange }
g { color: Blue }
</style>

```bash
├── I (interface)
│   └── C (class)
│       ├── A (class)
│       └── B (class)
```

### Return object from many types

Return \ Type |    A    |   B    |   C    |   I    | Null  |
:------------:|:-------:|:------:|:------:|:------:|:-----:|
A             | <o>Yes  | <r>No  | <o>Yes | <o>Yes | <r>No |
B             |  <r>No  | <o>Yes | <o>Yes | <o>Yes | <r>No |
C             |  <r>No  | <r>No  | <o>Yes | <o>Yes | <r>No |
I             | <o>Yes  | <o>Yes | <o>Yes |  ...   | <r>No |
Null          |  <r>No  | <r>No  | <r>No  | <r>No  | <r>No |

### Call methods of returned objects

 Object \ Method |   f    |   a1   |   b1   |
:---------------:|:------:|:------:|:------:|
A returned from A| <o>Yes | <o>Yes | <r>No  |
I returned from A| <o>Yes | <o>Yes | <r>No  |
B returned from B| <o>Yes | <r>No  | <o>Yes |
I returned from B| <o>Yes | <r>No  | <o>Yes |
A returned from C| <o>Yes | <o>Yes | <r>No  |
B returned from C| <o>Yes | <r>No  | <o>Yes |
C returned from C| <o>Yes | <r>No  | <r>No  |
I returned from C| <o>Yes | <r>No  | <r>No  |
A returned from I| <o>Yes | <o>Yes | <r>No  |
B returned from I| <o>Yes | <r>No  | <o>Yes |
C returned from I| <o>Yes | <r>No  | <r>No  |
