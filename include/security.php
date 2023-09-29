<script>
    
    const sanitize = (str) => {
        const map = {
            '&': '&',
            '<': '<',
            '>': '>',
            '"': '"',
            "'": ''',
        }

        const reg = /[&<>"']/gi

        return str.replace(reg, (match) => {
            return map[match]
        })
    }

    const value = sanitize('<h2>Hello World!</h2> <script>alert("hello")</script>')

    console.log(value)
</script>