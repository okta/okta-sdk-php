let fs = require("fs")

let filesJson = fs.readFileSync("./generator/createdFiles.json")

try {
  for (let file of JSON.parse(filesJson)) {
    fs.unlinkSync("../src/" + file)
  }
} catch (e) {

}

try {
    fs.readdir("../src/", function(err, folders) {
        for (let folder of folders) {
            if(fs.lstatSync("../src/" + folder).isDirectory()) {
                fs.readdir("../src/" + folder, function(err, items) {
                    if(items.length <= 0) {
                        fs.rmdirSync("../src/" + folder)
                    }
                })
            }
        }
    })
} catch (e) {

}

fs.writeFile("./generator/createdFiles.json", JSON.stringify(""), function(error) {
  console.log(error)
});
