# TIPE KOLOM UMUM 
- id()
- bigIncrements()
- increments()
- string()
- text()
- longText()
- integer()
- bigInteger()
- tinyInteger()
- boolean()
- float()
- decimal()
- date()
- dateTime()
- time()
- timestamp()
- binary()
- json()
- uuid()
- ipAddress()
- macAddress()
- enum ()

# MODIFIER
- unique()
- nullable()
- index()
- unsigned()
- onDelete()
- softDelete()

# FK
- $table->primary('id');
- $table->foreignId('user_id')->constrained();