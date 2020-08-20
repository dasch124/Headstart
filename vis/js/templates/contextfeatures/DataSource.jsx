import React from "react";

const DataSource = ({ label, value }) => {
  return (
    // html template starts here
    <span
      id="source"
      dangerouslySetInnerHTML={{
        __html: `${label}: ${value}`,
      }}
    ></span>
    // html template ends here
  );
};

export default DataSource;
